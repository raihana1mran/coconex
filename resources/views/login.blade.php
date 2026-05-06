<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coconex Admin Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@600;700;800&family=Be+Vietnam+Pro:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@0..1" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Be Vietnam Pro', sans-serif; background: #f9f9fc; color: #1a1c1e; min-height: 100vh; display: flex; align-items: center; justify-content: center; }
        h1, h2, h3 { font-family: 'Plus Jakarta Sans', sans-serif; }
        
        .login-card { background: white; border-radius: 24px; padding: 40px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); width: 100%; max-width: 400px; }
        
        .logo { font-size: 32px; font-weight: 800; color: #ff7e21; text-align: center; margin-bottom: 8px; }
        .subtitle { text-align: center; color: #999; margin-bottom: 32px; }
        
        .form-group { margin-bottom: 16px; }
        .form-group label { display: block; font-weight: 600; margin-bottom: 6px; color: #584236; font-size: 13px; }
        .form-group input { width: 100%; padding: 12px 16px; border: 1px solid #dfc0b1; border-radius: 10px; font-size: 14px; background: white; }
        .form-group input:focus { outline: none; border-color: #ff7e21; }
        
        .btn { width: 100%; padding: 12px 20px; border-radius: 10px; font-weight: 600; cursor: pointer; border: none; transition: all 0.2s; display: inline-flex; align-items: center; justify-content: center; gap: 8px; }
        .btn-orange { background: #ff7e21; color: white; }
        .btn-orange:hover { background: #e56e1a; }
        
        .error { background: #ffdad6; color: #ba1a1a; padding: 12px 16px; border-radius: 10px; margin-bottom: 16px; font-size: 14px; }
        
        .back-link { display: block; text-align: center; margin-top: 16px; color: #999; text-decoration: none; font-size: 14px; }
        .back-link:hover { color: #ff7e21; }
    </style>
</head>
<body>
    <div class="login-card">
        <h1 class="logo">Coconex</h1>
        <p class="subtitle">Admin Login</p>
        
        @if(session('error'))
        <div class="error">{{ session('error') }}</div>
        @endif
        
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required placeholder="Enter username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-orange">
                <span>Login</span>
            </button>
        </form>
        
        <a href="/" class="back-link">← Back to Home</a>
    </div>
</body>
</html>