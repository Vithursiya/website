<article class="hreview open special">

    <style>
    .form-horizontal{
        float: none;
        margin: 0 auto;
    }

    </style>


    <form class="form-horizontal" action="/Projekte/Website/public/zeugnis" method="POST">
        <div class="component" data-html="true">
            <div class="form-group">
                <div class="col-md-4">
                    <label for="benutzer"><span class="glyphicon glyphicon-user"></span>Benutzer</label>
                    <input name="benutzername" type="text" value="" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    <label for="passwort"><span class="glyphicon glyphicon-eye-open"></span> Passwort</label>
                    <input name="passwort" type="password" value="" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">&nbsp;</label>
                <div class="col-md-4">
                    <input name="send" type="submit" class="btn btn-primary " value="Login">
                </div>
            </div>
        </div>
    </form>

</article>
