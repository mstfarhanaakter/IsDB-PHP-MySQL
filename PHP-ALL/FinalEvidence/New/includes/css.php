<style>
  .flex-container {
  display: flex;
  gap: 40px;
  justify-content: center;
  flex-wrap: wrap; /* stack vertically on small screens */
  padding: 20px;
}

.form, .student-info-container {
  max-width: 600px;
  width: 100%;
  box-sizing: border-box;
}

/* Style your form container */
.form {
  background-color: #d5d3fdff;
  padding: 20px 30px;
  border-radius: 50px 5px 50px 5px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  display: flex;
  flex-direction: column;
  
}

/* Style your student info container */
.student-info-container {
  background-color: #ebd6ffff;
  border-radius: 15px;
  /* padding: 20px; */
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

/* Responsive layout */
/* @media (max-width: 900px) {
  .flex-container {
    flex-direction: column;
    align-items: center;
  }

  .form, .student-info-container {
    max-width: 90%;
  }
}
 */

  input {
    border: none;
    border-bottom: 1px solid black;
    padding: 8px;
    outline: none;
    width: 100%;
    /* optional: removes blue outline on focus */
    background-color: transparent;

  }

  /* input::placeholder{
        color:black;
    } */

  input[type="number"]::-webkit-inner-spin-button,
  input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  button {
    padding: 10px;
    border-radius: 3px 20px 3px 20px;
    border: none;
    font-weight: bold;
    letter-spacing: 2px;
    text-transform: uppercase;
    font-family: arial;
    cursor: pointer;

  }
  button:hover{
    background-color: #d5e1d1;
  }

  th, td{
    border:1px solid black;
   
  }


</style>