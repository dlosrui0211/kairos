<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kalvrei</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            background: #1a0033;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .login-container {
            background: #2d0052;
            border-radius: 20px;
            padding: 60px 40px;
            width: 100%;
            max-width: 500px;
            text-align: center;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
        }
        
        .logo {
            margin-bottom: 40px;
        }
        
        .logo h1 {
            color: white;
            font-size: 80px;
            font-weight: bold;
            letter-spacing: -5px;
            margin-bottom: 10px;
        }
        
        .logo-icon {
            display: inline-block;
            position: relative;
        }
        
        .welcome-text {
            color: white;
            font-size: 16px;
            margin-bottom: 40px;
        }
        
        .form-group {
            margin-bottom: 25px;
            text-align: left;
        }
        
        .form-group label {
            color: white;
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        
        .form-group input {
            width: 100%;
            padding: 15px 20px;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            outline: none;
        }
        
        .login-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(90deg, #8b00ff, #ff00ff);
            border: none;
            border-radius: 25px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 20px;
            transition: transform 0.2s;
        }
        
        .login-btn:hover {
            transform: scale(1.02);
        }
        
        .register-link {
            color: white;
            margin-top: 25px;
            font-size: 14px;
        }
        
        .register-link a {
            color: #ff00ff;
            text-decoration: none;
            font-weight: bold;
        }
        
        .error-message {
            background: rgba(255, 0, 0, 0.2);
            color: #ff6b6b;
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 14px;
        }
        
        /* Responsivo */
        @media (max-width: 768px) {
            .login-container {
                padding: 40px 30px;
            }
            
            .logo h1 {
                font-size: 60px;
            }
            
            .welcome-text {
                font-size: 14px;
            }
            
            .form-group input {
                padding: 12px 18px;
                font-size: 14px;
            }
            
            .login-btn {
                padding: 12px;
                font-size: 14px;
            }
        }
        
        @media (max-width: 480px) {
            .login-container {
                padding: 30px 20px;
            }
            
            .logo h1 {
                font-size: 50px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <img src="/img/kairos.png" alt="Kairos">
        </div>
        
        <p class="welcome-text">¡Bienvenido a Kairos!</p>
        
        <?php if (isset($error)): ?>
            <div class="error-message"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        
        <form method="POST" action="">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <button type="submit" name="login" class="login-btn">Log in</button>
        </form>
        
        <p class="register-link">
            ¿Aún no tienes cuenta? <a href="register.php">Regístrate aquí</a>
        </p>
    </div>
</body>
</html>