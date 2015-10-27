<?php

$limit = 10;
$adjacent = 3;

if (isset($_REQUEST['actionfunction']) && $_REQUEST['actionfunction'] != '') {
    $actionfunction = $_REQUEST['actionfunction'];

    call_user_func($actionfunction, $_REQUEST, $con, $limit, $adjacent);
}

function showData($data, $con, $limit, $adjacent) {
    $page = $data['page']; #1
    if ($page == 1) {
        $start = 0;
    } else {
        $start = ($page - 1) * $limit;
    }

    #Query
    include_once 'conexao.php';

    $stmt1 = $dbh->prepare("SELECT COUNT(t.trans_id) as qtd FROM copaifera_multijuga.transcript t INNER JOIN 
                                copaifera_multijuga.database_annotations da ON t.trans_id = da.trans_id INNER JOIN copaifera_multijuga.annotation a
                                ON a.ann_id = da.ann_id WHERE a.dat_id = 1");
    $stmt1->execute();

    #Numero de linhas retornadas da query
    $result1 = $stmt1->fetch(PDO::FETCH_ASSOC);
    $rows = $result1['qtd'];


    $stmt2 = $dbh->prepare("SELECT t.trans_id, t.trans_number_of_reads, a.ann_code,a.ann_annotation FROM copaifera_multijuga.transcript t INNER JOIN 
                                copaifera_multijuga.database_annotations da ON t.trans_id = da.trans_id INNER JOIN copaifera_multijuga.annotation a
                                ON a.ann_id = da.ann_id WHERE a.dat_id = 1 ORDER BY t.trans_number_of_reads DESC  OFFSET $start LIMIT $limit");
    $stmt2->execute();
    $result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);


    $str = '<table><tr class="head"><td>Id</td><td>No of reads</td><td>Annotation code</td><td>Annotation</td></tr>';
    if ($rows > 0) {
        foreach ($result2 as $row) {
            $str.="<tr><td>" . $row['trans_id'] . "</td><td>" . $row['trans_number_of_reads'] . "</td><td>" . $row['ann_code'] . "</td><td style='text-align: justify;'>" . $row['ann_annotation'] . "</td></tr>";
        }
    } else {
        $str .= "<td colspan='5'>No Data Available</td>";
    }
    $str.='</table>';

    echo $str;
    pagination($limit, $adjacent, $rows, $page);
}

function pagination($limit, $adjacents, $rows, $page) {
    $pagination = '';
    if ($page == 0) {//if no page var is given, default to 1.
        $page = 1;
    }
    $prev = $page - 1;  #-0     //previous page is page - 1
    $next = $page + 1;  #+2     //next page is page + 1
    $prev_ = '';
    $first = '';
    $lastpage = ceil($rows / $limit);
    $next_ = '';
    $last = '';
    if ($lastpage > 1) {
        //previous button
        if ($page > 1)
            $prev_.= "<a class='page-numbers' href=\"?page=$prev\">previous</a>";
        else {
            //$pagination.= "<span class=\"disabled\">previous</span>";	
        }

        //pages	
        if ($lastpage < 5 + ($adjacents * 2)) { //not enough pages to bother breaking it up
            $first = '';
            for ($counter = 1; $counter <= $lastpage; $counter++) {
                if ($counter == $page)
                    $pagination.= "<span class=\"current\">$counter</span>";
                else
                    $pagination.= "<a class='page-numbers' href=\"?page=$counter\">$counter</a>";
            }
            $last = '';
        }
        elseif ($lastpage > 3 + ($adjacents * 2)) { //enough pages to hide some
            //close to beginning; only hide later pages
            $first = '';
            if ($page < 1 + ($adjacents * 2)) {
                for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++) {
                    if ($counter == $page)
                        $pagination.= "<span class=\"current\">$counter</span>";
                    else
                        $pagination.= "<a class='page-numbers' href=\"?page=$counter\">$counter</a>";
                }
                $last.= "<a class='page-numbers' href=\"?page=$lastpage\">Last</a>";
            }

            //in middle; hide some front and some back
            elseif ($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)) {
                $first.= "<a class='page-numbers' href=\"?page=1\">First</a>";
                for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {
                    if ($counter == $page)
                        $pagination.= "<span class=\"current\">$counter</span>";
                    else
                        $pagination.= "<a class='page-numbers' href=\"?page=$counter\">$counter</a>";
                }
                $last.= "<a class='page-numbers' href=\"?page=$lastpage\">Last</a>";
            }
            //close to end; only hide early pages
            else {
                $first.= "<a class='page-numbers' href=\"?page=1\">First</a>";
                for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++) {
                    if ($counter == $page)
                        $pagination.= "<span class=\"current\">$counter</span>";
                    else
                        $pagination.= "<a class='page-numbers' href=\"?page=$counter\">$counter</a>";
                }
                $last = '';
            }
        }
        if ($page < $counter - 1)
            $next_.= "<a class='page-numbers' href=\"?page=$next\">next</a>";
        else {
            //$pagination.= "<span class=\"disabled\">next</span>";
        }
        $pagination = "<div class=\"pagination\">" . $first . $prev_ . $pagination . $next_ . $last;
        //next button

        $pagination.= "</div>\n";
    }

    echo $pagination;
}
?>