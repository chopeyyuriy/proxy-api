@extends('layouts.main')
@section('main_content')
    <div class="main-content">


        <div class="main-top">
            <h2 class="main-title">Alerts</h2>
            <form action="#" class="main-search">
                <input type="text" placeholder="Search">
                <button></button>
            </form>
            <button class="btn btn-add" data-popup-open="new-task">New task</button>
        </div>

        <div class="scroller">
            <table class="table">
                <colgroup>
                    <col style="--lg: 210px;">
                    <col style="--lg: 210px;">
                    <col style="--lg: 210px;">
                    <col style="--lg: 210px;">
                    <col style="width: 56px;">
                </colgroup>
                <thead>
                <tr>
                    <th class="sort">Query</th>
                    <th class="sort">Start Date</th>
                    <th class="sort">Status</th>
                    <th class="sort">Time</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><span class="table-query"><p>usermail is loleeta_4@hotmail.com</p></span></td>
                    <td>2024-06-12 10:36:22 +0400</td>
                    <td><span class="table-status done"><p>Done</p></span></td>
                    <td>About 4 hours ago</td>
                    <td><span class="table-view-arrow" data-popup-open="task-info-1"></span></td>
                </tr>
                <tr>
                    <td><span class="table-query"><p>usermail is loleeta_4@hotmail.com</p></span></td>
                    <td>2024-06-12 10:36:22 +0400</td>
                    <td><span class="table-status done"><p>Done</p></span></td>
                    <td>About 4 hours ago</td>
                    <td><span class="table-view-arrow" data-popup-open="task-info-1"></span></td>
                </tr>
                <tr>
                    <td><span class="table-query"><p>usermail is loleeta_4@hotmail.com</p></span></td>
                    <td>2024-06-12 10:36:22 +0400</td>
                    <td><span class="table-status done"><p>Done</p></span></td>
                    <td>About 4 hours ago</td>
                    <td><span class="table-view-arrow" data-popup-open="task-info-1"></span></td>
                </tr>
                <tr>
                    <td><span class="table-query"><p>usermail is loleeta_4@hotmail.com</p></span></td>
                    <td>2024-06-12 10:36:22 +0400</td>
                    <td><span class="table-status done"><p>Done</p></span></td>
                    <td>About 4 hours ago</td>
                    <td><span class="table-view-arrow" data-popup-open="task-info-1"></span></td>
                </tr>
                <tr>
                    <td><span class="table-query"><p>usermail is loleeta_4@hotmail.com</p></span></td>
                    <td>2024-06-12 10:36:22 +0400</td>
                    <td><span class="table-status done"><p>Done</p></span></td>
                    <td>About 4 hours ago</td>
                    <td><span class="table-view-arrow" data-popup-open="task-info-1"></span></td>
                </tr>
                <tr>
                    <td><span class="table-query"><p>usermail is loleeta_4@hotmail.com</p></span></td>
                    <td>2024-06-12 10:36:22 +0400</td>
                    <td><span class="table-status done"><p>Done</p></span></td>
                    <td>About 4 hours ago</td>
                    <td><span class="table-view-arrow" data-popup-open="task-info-1"></span></td>
                </tr>
                <tr>
                    <td><span class="table-query"><p>usermail is loleeta_4@hotmail.com</p></span></td>
                    <td>2024-06-12 10:36:22 +0400</td>
                    <td><span class="table-status done"><p>Done</p></span></td>
                    <td>About 4 hours ago</td>
                    <td><span class="table-view-arrow" data-popup-open="task-info-1"></span></td>
                </tr>
                <tr>
                    <td><span class="table-query"><p>usermail is loleeta_4@hotmail.com</p></span></td>
                    <td>2024-06-12 10:36:22 +0400</td>
                    <td><span class="table-status done"><p>Done</p></span></td>
                    <td>About 4 hours ago</td>
                    <td><span class="table-view-arrow" data-popup-open="task-info-1"></span></td>
                </tr>
                <tr>
                    <td><span class="table-query"><p>usermail is loleeta_4@hotmail.com</p></span></td>
                    <td>2024-06-12 10:36:22 +0400</td>
                    <td><span class="table-status done"><p>Done</p></span></td>
                    <td>About 4 hours ago</td>
                    <td><span class="table-view-arrow" data-popup-open="task-info-1"></span></td>
                </tr>
                <tr>
                    <td><span class="table-query"><p>usermail is loleeta_4@hotmail.com</p></span></td>
                    <td>2024-06-12 10:36:22 +0400</td>
                    <td><span class="table-status done"><p>Done</p></span></td>
                    <td>About 4 hours ago</td>
                    <td><span class="table-view-arrow" data-popup-open="task-info-1"></span></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="table-bottom">
            <ul class="table-pagination">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
            </ul>
            <div class="table-total">All lines: <span>120</span></div>
        </div>


    </div>
@endsection
