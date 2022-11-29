<?php

class Paginator extends Db {
    public function initPaginate( $url, $current_page, $page_max ) {

        $output = 
        "<!-- Shop-Pagination -->
        <div class='pagination-area'>
            <div class='pagination-number'>
                <ul>";
                    if( $current_page > 1 && $page_max > 1 ) {
                        $output .= 
                            "<li>
                                <a href='".$url."page=".($current_page-1).""."' title='Previous'>
                                    <i class='fa fa-angle-left'></i>
                                </a>
                            </li>";
                    } 
                    for( $i = 1; $i <= $page_max; $i++ ) {
                        if( $current_page == $i ) {
                            $output .= 
                                "<li class='active'>
                                    <a href='#!'>$i</a>
                                </li>";
                        } 
                        else {
                            $output .= 
                                "<li>
                                    <a href='".$url."page=$i"."'>$i</a>
                                </li>";
                        }
                    }
                    
                    if( $page_max > 1 && $page_max > $current_page ) {
                        $output .= 
                        "<li>
                            <a href='".$url."page=".($current_page+1).""."' title='Next'>
                                <i class='fa fa-angle-right'></i>
                            </a>
                        </li>";
                    }

                $output .=
                "</ul>
            </div>
        </div>";

        return $output;
    }
}