<div class="jumbotron">
    <h1 class="display-4">Inloggen</h1>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                
            </div>
            <div class="col-sm-6">
                <form action="?pageid=index9" method="post">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email adres</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Emailadres" value="<?php if (isset($_GET['email'])) {
                                                                                                                                                echo $_GET['email'];
                                                                                                                                            } ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Wachtwoord</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="wachtwoord">
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-outline-info btn-lg btn-block">Log in</button>
                        <br>
                        <a class="btn btn-primary" href="?pageid=index5">Registreer hier</a>
                    </div>
                </form>
            </div>
        
        </div>
    </div>
    <div class="col-sm-3">
        
    </div>
</div>
</div>