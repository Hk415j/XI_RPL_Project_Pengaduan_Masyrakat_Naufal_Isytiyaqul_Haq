<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login1.css">
</head>
<body>
    <div class="form">
      
        <ul class="tab-group">
          <li class="tab active"><a href="#signup">Sign Up</a></li>
          <li class="tab"><a href="#login">Log In</a></li>
        </ul>
        <div class="tab-content">
          <div id="signup">   
            <h1>Sign Up for Free</h1>
            
            <form action="/" method="post">
            
            <div class="top-row">
              <div class="field-wrap">
                <label>
                  NIK<span class="req">*</span>
                </label>
                <input type="text" required autocomplete="off" />
              </div>
          
              <div class="field-wrap">
                <label>
                  Nama<span class="req">*</span>
                </label>
                <input type="text"required autocomplete="off"/>
              </div>
            </div>
    
            <div class="field-wrap">
              <label>
                Email Address<span class="req">*</span>
              </label>
              <input type="email"required autocomplete="off"/>
            </div>
            
            <div class="field-wrap">
              <label>
                Set A Password<span class="req">*</span>
              </label>
              <input type="password"required autocomplete="off"/>
            </div>
            
            <button type="submit" class="button button-block"/>Daftar</button>
            
            </form>
    
          </div>
          
          <div id="login">   
            <h1>Welcome Back!</h1>
            
            <form action="/" method="post">
            
              <div class="field-wrap">
              <label>
                Email Address<span class="req">*</span>
              </label>
              <input type="email"required autocomplete="off"/>
            </div>
            
            <div class="field-wrap">
              <label>
                Password<span class="req">*</span>
              </label>
              <input type="password"required autocomplete="off"/>
            </div>
            
            <p class="forgot"><a href="#">Forgot Password?</a></p>
            
            <a href="../Halaman_utama/Tampil.html"></a><button class="button button-block"/>Log In</button></a>
            
            </form>
    
          </div>
          
        </div><!-- tab-content -->
        
    </div> <!-- /form -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="buatlogin.js"></script>
</body>
</html>