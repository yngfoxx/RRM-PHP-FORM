<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./lib/styles/style.desktop.css?v=5" />
    <link rel="stylesheet" media="screen and (max-width: 700px)" href="./lib/styles/style.mobile.css?v=3" />
    <title>RRM PHP FORM</title>
</head>
<body>
    <div class="container">
        <form method="POST" id="form">
            <div class="row">
                <div class="col">
                    <label>First name</label><input type="text" name="firstname" >
                </div>
                <div class="col">
                    <label>Last name</label><input type="text" name="lastname" >
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label>Email address</label><input type="email" name="email" >
                </div>
                <div class="col">
                    <label>Telephone number</label><input type="tel" name="teleNumber" >
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label>Address 1</label>
                    <input type="text" name="address1" >
                </div>
                <div class="col">
                    <label>Address 2</label>
                    <input type="text" name="address2">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label>Town</label>
                    <input type="text" name="town" >
                </div>
                <div class="col">
                    <label>County</label>
                    <input type="text" name="county">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label>Postcode</label>
                    <input type="text" name="postcode" >
                </div>
                <div class="col">
                    <label>Country</label>
                    <div class="select">
                        <select name="country" >
                            <option value="">Select country...</option>
                            <option value="united kingdom">United Kingdom</option>
                            <option value="united states">United States</option>
                            <option value="nigeria">Nigeria</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Description</label>
                    <textarea name="description"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Your C.V</label>
                    <div class="row">
                        <span style="margin-right: 10px;">Select a file</span> <input type="file" name="cv" title="Max file upload size is 40 MB">
                    </div>
                </div>
            </div>
            <button type="submit" class="submit">Submit</button>
        </form>
    </div>
    <script src="./lib/scripts/script.js"></script>
</body>
</html>