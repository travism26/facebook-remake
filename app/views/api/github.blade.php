@extends('layouts.default')

@section('content')
    <div id="repos">
        <ul id="repo_list">
        </ul>
    </div>
    <div id="repo_content"></div>
    <button id="btn_get_repos">Get Repos</button>
    <span id="repo_count"></span>

    @if($username != null)
        <h1>Welcome {{ $username }}</h1>

        <script href="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
            $("#btn_get_repos").click(function () {
                $.ajax({
                    type: "GET",
                    url: "https://api.github.com/users/travism26/repos",
                    dataType: "json",
                    success: function (result) {
                        for (var i in result) {
                            $("#repo_list").append(
                                    "<li><a href='" + "trest" + "' target='_blank'>" +
                                    result[i].name + "</a></li>"
                            );
                            console.log("i: " + i);
                        }
                        console.log(result);
                        $("#repo_count").append("Total Repos: " + result.length);
                    }
                });
            });
        </script>
    @endif
@stop