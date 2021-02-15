<div class="side-nav">
    <div class="nav-search">
        <i id="search-btn" class="bx bx-search-alt"></i>
        <div id="search-overlay" class="block">
            <div class="centered">
                <div id="search-box">
                    <i id="close-btn" class="bx bx-x"></i>
                    {!! Form::open(['method' => 'GET','action' => 'App\Http\Controllers\Frontend\MainController@searchProject']) !!}
                    <input name="title" type="text" class="form-control" placeholder="جستجو..."/>
                    <button type="submit" class="btn">جستجو</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
