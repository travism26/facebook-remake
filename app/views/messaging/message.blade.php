<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
    <meta charset="UTF-8" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/main.css">
        <title>Laravel 4 Chat</title>
    </head>
    <body>
        <script type="text/x-handlebars">
                    @{{outlet}}
                </script>
                <script type="text/x-handlebars" data-template-name="index">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Laravel 4 Chat</h1>
                                <table class="table table-striped">
                                    @{{#each message in model}}
                                        <tr>
                                            <td @{{bind-attr class="message.user_id_class"}}>
                                                @{{message.user_name}}
                                            </td>
                                            <td>
                                                @{{message.message}}
                                            </td>
                                        </tr>
                                    @{{/each}}
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    @{{input type="text" value=command class="form-control"}}
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" @{{action "send"}}>Send</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </script>
        @include('messaging.partials.jsDependencies')
    </body>
</html>