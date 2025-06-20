<style>
* {
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}


.success {
    width: 100%;
    background-color: green;
    padding: 10px;
    border-radius: 10px;
    color: #fff;
    text-align: center;
    margin: 15px;
}

body {
    margin: 0;
    padding: 0;
    background: linear-gradient(135deg, #4b6cb7, #182848);
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.login-container {
    background-color: white;
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 400px;
}

.login-container h2 {
    text-align: center;
    margin-bottom: 30px;
    color: #333;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 6px;
    font-weight: bold;
    color: #444;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    transition: border-color 0.3s;
}

.form-group input:focus {
    border-color: #4b6cb7;
    outline: none;
}

.login-btn {
    width: 100%;
    padding: 12px;
    background-color: #4b6cb7;
    color: white;
    border: none;
    border-radius: 8px;
    font-weight: bold;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.login-btn:hover {
    background-color: #3a58a2;
}

.login-container .footer {
    text-align: center;
    margin-top: 15px;
    font-size: 14px;
    color: #555;
}

.login-container .footer a {
    color: #4b6cb7;
    text-decoration: none;
}

.login-container .footer a:hover {
    text-decoration: underline;
}
</style>