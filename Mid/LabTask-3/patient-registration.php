<!DOCTYPE html>
<html>
<head>
    <title> Registration</title>
     <link rel="stylesheet" href="..MId/LabTask-3/task_style.css">

</head>
<body>
<div class="form-container">
    <h1> Clinic Patient Registration </h1>

    <form>

        <div>
            <label> Full Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

         <div>
            <label> Age</label>
            <input type="number" id="number" name="number" required>
        </div>

         <div>
            <label> Full Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

           <div>
            <label> Phone Number:</label>
            <input type="text" id="number" name="number" required>
        </div>

           <div>
            <label> Full Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

          <div>
          <label for="insurance"> Insurance Prodider</label>
          <select id="insurance" required>
            <option value="">Select Insurance Prodider</option>
             <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
          </select>
        </div>

          <div>
            <label> Insurance Policy Number:</label>
            <input type="text" id="policy" name="policy" required>
        </div>

        <h2> Additional Information</h2>

         <div>

            <label> Username:</label>
            <input type="text" id="username" name="username" required>
        </div>

         <div>
            <label> Password:</label>
            <input type="text" id="pass" name="pass" required>
        </div>

        <div>
            <label> Confirm Password:</label>
            <input type="text" id="Cpass" name="Cpass" required>
        </div>
       <button type="submit"> Submit</button>
</div>
</body>
</html>

