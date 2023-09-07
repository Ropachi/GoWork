@section('logout')
    <div class="book-logout">
        <div>
            <?php
            $memName = session('sName');
            ?>
            <p>{{$memName}}様</p>
        </div>        <div>
            <form action="logout" method="get">
                <input type="submit" value="ログアウト">
            </form>
        </div>

    </div>
@endsection
