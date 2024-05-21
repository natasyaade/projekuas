<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
</head>

<style>
    body {
        background: url(bg3.jpg);
        background-repeat: no-repeat;
        background-size:cover;
        margin:0;
        padding:0;
       
    }
    @media screen and (max-width:680px){

#maincontent{
    width: auto;
    float: none;
}
#sidebar{
    width: auto;
    float: none;
}
}

    #card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 410px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
    }

    #card-content {
        padding: 12px 44px;
    }

    #card-title {
        font-family: "Raleway Thin", sans-serif;
        letter-spacing: 4px;
        padding-bottom: 22px;
        padding-top: 13px;
        text-align: center;
    }

    .underline-title {
        background: -webkit-linear-gradient(right, #3081D0, #3081D0);
        height: 2px;
        margin: -1.1rem auto 0 auto;
        width: 89px;
    }

    a {
        text-decoration: none;
    }

    label {
        font-family: "Raleway", sans-serif;
        font-size: 11pt;
    }

    .form {
        align-items: left;
        display: flex;
        flex-direction: column;
    }

    .form-border {
        background: -webkit-linear-gradient(right, #3081D0, #3081D0);
        height: 1px;
        width: 100%;
    }

    .form-content {
        background: #fbfbfb;
        border: none;
        outline: none;
        padding-top: 14px;
    }
    #signup {
    color: #3081D0;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 16px;
    text-align: center;
}
#submit-btn {
    background: -webkit-linear-gradient(right, #3081D0, #3081D0);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #3081D0;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.25s;
    width: 153px;
}
#submit-btn:hover {
    box-shadow: 0px 1px 18px #ff0400;
}
#copy{
  font-family: "Raleway Thin", sans-serif;
  color:#ffffff;
  letter-spacing: 1px;
  padding-bottom: 2px;
  padding-top: 20px;
  text-align: center;
}
</style>
</head>
<body>
<div id="card">
<div id="card-content">
    <div id="card-title">
        <h3>Perpustakaan SDN Kauman 01</h3><br>
        
        <div class="underline-title"></div>
    </div>
    <form action="proses-login.php" method="POST" class="form"> 
    <label for="user" style="padding-top:13px">&nbsp;Username</label>
    <input id="user" class="form-content" type="username" name="username" required />
    <div class="form-border"></div>
    <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
    <input id="user-password" class="form-content" type="password" name="password" required />
    <div class="form-border"></div>
    
    
    <input id="submit-btn" type="submit" name="btnlogin" value="LOGIN"/>
    
</div>
</div> 

</form> 
</html>