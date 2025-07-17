<style>
  .form {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  form {
    background-color: #aec3b0;
    padding: 20px;
    border-radius: 50px 5px 50px 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
  }

  input {
    border: none;
    border-bottom: 1px solid black;
    padding: 8px;
    outline: none;
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
</style>