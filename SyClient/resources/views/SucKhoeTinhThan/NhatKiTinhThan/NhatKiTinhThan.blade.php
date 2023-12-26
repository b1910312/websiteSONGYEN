@extends('Layouts.App')
@section('content')
    <style>
        .tox .tox-menubar {
            display: none
        }
    </style>
    <div class="bg bg-primary" style="height: 100px"></div>
    <div class="m-3 p-2 card bg bg-white">
        <h3 class="text-center m-3">Nhật ký tinh thần</h3>
        <form method="post">
            <textarea id="myeditorinstance" placeholder="Nhập nội dung tại đây"></textarea>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            $('.tox-statusbar').hide();

        });
    </script>
@endsection
