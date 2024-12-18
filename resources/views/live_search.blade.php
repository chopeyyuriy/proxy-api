@extends('layouts.main')
@section('main_content')
    <div class="main-content">


        <div class="main-top">
            <h2 class="main-title">Live search</h2>
        </div>

        <div class="live-grid">
            <div class="live-sidebar">
                <form action="#" class="live-search">
                    <input type="text" class="input input-search" placeholder="Search">

                    <div class="live-query-group">
                        <select name="type" class="select select-type">
                            <option value="Username">Username</option>
                            <option value="E-mail">E-mail</option>
                            <option value="ID">ID</option>
                        </select>
                        <div class="live-query-delete"></div>
                    </div>

                    <div class="live-query"></div>
                    <button type="button" class="live-query-add">Add</button>
                    <h4 class="live-title">Leak type</h4>
                    <div class="live-checkboxes">
                        <div class="checkbox-inline-group">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="type" value="All" checked>
                                <span>All</span>
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="type" value="Combo">
                                <span>Combo</span>
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="type" value="Databases">
                                <span>Databases</span>
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="type" value="Logs">
                                <span>Logs</span>
                            </label>
                        </div>
                    </div>
                    <h4 class="live-title">Instance</h4>
                    <select class="select">
                        <option value="Main">Main</option>
                        <option value="Main">Main</option>
                        <option value="Main">Main</option>
                        <option value="Main">Main</option>
                    </select>
                    <div class="live-search__btn">
                        <button class="btn">Search</button>
                    </div>
                </form>
            </div>
            <div class="live-main">
                <div class="scroller">
                    <!--
                      --xl >1440
                      --lg <1440
                      --md <1024 (если неуказано, берется значение lg)

                      пример:
                      --xl: 270px; --lg: 220px; --md: 170px;
                    -->
                    <table class="table table-live">
                        <colgroup>
                            <col style="--xl: 270px; --lg: 220px;">
                            <col style="--xl: 270px; --lg: 220px;">
                            <col style="--xl: 270px; --lg: 220px;">
                            <col style="--xl: 600px; --lg: 540px;">
                        </colgroup>
                        <thead>
                        <tr>
                            <th class="sort">Name</th>
                            <th class="sort">Usermail</th>
                            <th class="sort">Username</th>
                            <th>Userpass_plain</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>leakedreality.com</td>
                            <td>-</td>
                            <td>Test</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>leakedreality.com</td>
                            <td>-</td>
                            <td>Test</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>leakedreality.com</td>
                            <td>-</td>
                            <td>Test</td>
                            <td>-</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
@endsection
