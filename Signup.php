<head>
    <link rel="stylesheet" type="text/css" href="/CSS/signup.css">
</head>

<body>
    <div class="SignupPage">
        <div class="signupContainer">
            <svg>
                <text y="80%">MENTORSHIP</text>
            </svg>
            <h1>SignUp Info</h1>
            <a href="/index.php"><text>Dashbaord</text></a>
            <form action="/index.php" method="post">
                <input type="namespace" value="" placeholder="NAME" required>
                <input type="date" value="" placeholder="Choose Your BirthDate" required>
                <br>
                <select style="border: none;
                            padding-left: 1rem;
                            font-size: 1.4rem;
                            border-bottom: 1px solid gray;
                            border-left: 1px solid gray;
                            border-right: 1px solid gray;
                            margin-left: 4rem;
                            outline: none;
                            width: 75%;
                            margin-bottom: 1.5rem;" name="Gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <br>
                <input type="email" value="" placeholder="Enter Your Email" required>
                <input type="password" value="" placeholder="Create A Password" required>
                <input class="submit" type="submit" value="SignUp">
            </form>
            <button><a href="/login.php">LOGIN</a></button>
        </div>
    </div>
</body>