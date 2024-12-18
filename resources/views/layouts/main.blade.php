@extends('layouts.app')
@section('content')
    <section class="dashboard">
        <aside class="sidebar">
            <a href="{{ route('index') }}" class="sidebar-logo"><img src="{{ asset('img/svg/logo-full.svg') }}" alt=""></a>
            <ul class="sidebar-nav">
                <li class="active">
                    <a href="#">
                        <img src="{{ asset('img/svg/product-1s.svg') }}" alt=""><span>OneSearch</span>
                    </a>
                </li>
                <li><a href="{{ route('posts') }}"><img src="{{ asset('img/svg/nav-2.svg') }}" alt=""><span>Posts</span></a></li>
            </ul>
            <div class="sidebar-copy">
                datamaze © 2024<br>
                BASED IN Constellation Rd,<br>
                Santa Clarita, CA 91355
            </div>
            <div class="sidebar-toggle"></div>
        </aside>

        <main class="main">
            @include('layouts.includes.header')
            @yield('main_content')
        </main>

        <div class="popup" data-popup="task-info-1">
            <div class="popup-backdrop"></div>
            <div class="popup-content">
                <div class="popup-close"></div>

                <div class="popup-title">
                    <h3>Task Info</h3>
                </div>

                <div class="popup-group show">
                    <div class="popup-basic__inputs-group">
                        <label class="label fluid">
                            <span>Instance</span>
                            <p class="input"><span>121372c8-33f6-4f10-88da-2e1fd35a3159</span></p>
                        </label>
                        <label class="label fluid">
                            <span>Query</span>
                            <p class="input"><span>usermail is loleeta_4@hotmail.com</span></p>
                        </label>
                        <label class="label fluid">
                            <span>Where to search</span>
                            <p class="input"><span>everywhere</span></p>
                        </label>
                        <label class="label fluid">
                            <span>Created at</span>
                            <p class="input"><span>2024-06-05 10:01:27 +0400</span></p>
                        </label>
                        <label class="label fluid">
                            <span>Report link</span>
                            <a href="#" class="input input-link"><span>https://1search.one/api//report/121372c8-33f6-4f10-88da-2e1fd35a3159.xlsx</span></a>
                        </label>
                    </div>
                    <div class="popup-tasks__bottom">
                        <a href="#" class="btn btn-outline">Download report<i class="icon download"></i></a>
                        <a href="#" class="btn btn-outline">Preview<i class="icon link"></i></a>
                        <a href="#" class="btn btn-red" data-popup-open="delete"><i class="icon delete"></i>Destroy</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="popup" data-popup="new-task">
            <div class="popup-backdrop"></div>
            <div class="popup-content">
                <div class="popup-close"></div>

                <div class="popup-title">
                    <h3>Create new search task</h3>
                </div>

                <div class="popup-group show">
                    <div class="popup-section">

                        <div class="popup-task-query-group">
                            <select name="type" class="select select-type">
                                <option value="Username">Username</option>
                                <option value="E-mail">E-mail</option>
                                <option value="ID">ID</option>
                            </select>
                            <input type="text" name="query" class="input"
                                   placeholder="example@gmail.com or %@gmail.com">
                            <select name="combine" class="select select-combine">
                                <option value="or">or</option>
                                <option value="or">and</option>
                            </select>
                            <div class="popup-task-query-delete"></div>
                        </div>

                        <div class="popup-task-query">
                            <div class="popup-task-query-group">
                                <select name="type" class="select select-type">
                                    <option value="Username">Username</option>
                                    <option value="E-mail">E-mail</option>
                                    <option value="ID">ID</option>
                                </select>
                                <input type="text" name="query" class="input"
                                       placeholder="example@gmail.com or %@gmail.com">
                                <select name="combine" class="select select-combine">
                                    <option value="or">or</option>
                                    <option value="or">and</option>
                                </select>
                                <div class="popup-task-query-delete"></div>
                            </div>
                        </div>
                        <button class="popup-task-add">Add</button>
                    </div>
                    <div class="popup-section">
                        <h4 class="popup-section__title">Not empty</h4>
                        <label class="label label-select">
                            <select class="js-select" multiple placeholder="Select fields">
                                <option value="">Select fields</option>
                                <option style="--color: #03C444;">Field 1</option>
                                <option style="--color: #2277F6;">Field 2</option>
                                <option style="--color: #DE6005;">Field 3</option>
                                <option style="--color: #FFFFFF;">Field 4</option>
                                <option style="--color: #E915ED;">Field 5</option>
                            </select>
                        </label>
                        <h4 class="popup-section__title">Leak type</h4>
                        <div class="checkbox-inline-group">
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
                        <h4 class="popup-section__title">Instance</h4>
                        <div class="checkbox-inline-group">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="instance" value="Main">
                                <span>Main</span>
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="instance" value="E-mail">
                                <span>E-mail</span>
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="instance" value="Mobile number">
                                <span>Mobile number</span>
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="instance" value="4">
                                <span>4</span>
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="instance" value="5">
                                <span>5</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="popup-bottom">
                    <button class="btn btn-save">Create Task</button>
                </div>

            </div>
        </div>
        <div class="popup popup-delete" data-popup="delete">
            <div class="popup-backdrop"></div>
            <div class="popup-content">
                <div class="popup-close"></div>
                <h3>Delete user</h3>
                <p>This action cannot be undone, you will need to add it again</p>
                <div class="btn-row">
                    <button class="btn-sm btn-delete-no">No</button>
                    <button class="btn-sm btn-delete-yes">Yes</button>
                </div>
            </div>
        </div>
    </section>
@endsection
