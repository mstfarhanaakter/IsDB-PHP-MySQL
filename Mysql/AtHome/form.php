<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
body {
  background-color: #FFF2F2;
  font-family: 'Segoe UI', sans-serif;
}

.get-in-touch-container {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 40px;
  padding: 50px 20px;
}

.get-in-touch {
  width: 100%;
  max-width: 450px;
  position: relative;
  background: #fff;
  border: 1px solid #eaeaea;
  padding: 30px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
  border-radius: 10px;
}

.get-in-touch .title {
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 1.8em;
  margin-bottom: 30px;
  background: linear-gradient(to right, #7886C7, #2D336B);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.contact-form .form-field {
  position: relative;
  margin-bottom: 28px;
}

.contact-form .input-text {
  width: 100%;
  border: none;
  border-bottom: 2px solid #A9B5DF;
  font-size: 16px;
  padding: 8px 0;
  background: transparent;
  transition: border-color 0.3s ease;
}

.contact-form .input-text:focus {
  outline: none;
  border-color: #7886C7;
}

.contact-form .input-text:focus + .label,
.contact-form .input-text.not-empty + .label {
  transform: translateY(-20px);
  font-size: 14px;
  color: #2D336B;
  font-weight:bold;
}

.contact-form .label {
  position: absolute;
  left: 0;
  bottom: 8px;
  font-size: 16px;
  color: #A9B5DF;
  transition: all 0.2s ease-in-out;
  pointer-events: none;
}

.contact-form .submit-btn {
  width: 100%;
  background: linear-gradient(to right, #7886C7, #2D336B);
  border: none;
  color: white;
  padding: 10px;
  font-size: 16px;
  text-transform: uppercase;
  cursor: pointer;
  border-radius: 4px;
  transition: background 0.3s ease;
}

.contact-form .submit-btn:hover {
  background: linear-gradient(to right, #2D336B, #7886C7);
}
</style>


<div class="get-in-touch-container">
  <!-- Form 1 -->
  <section class="get-in-touch">
    <h1 class="title">Manufacturer Info</h1>
    <form class="contact-form">
      <div class="form-field">
        <input id="name1" name="name" class="input-text js-input" type="text" required>
        <label class="label" for="name1">Name</label>
      </div>
      <div class="form-field">
        <input id="address1" class="input-text js-input" type="text" required>
        <label class="label" name="add" for="address1">Address</label>
      </div>
      <div class="form-field">
        <input id="contact1" name="contct" class="input-text js-input" type="text" required>
        <label class="label" for="contact1">Contact No.</label>
      </div>
      <div class="form-field">
        <input class="submit-btn" type="submit" value="Submit" name="submit">
      </div>
    </form>
  </section>

  <!-- Form 2 -->
  <section class="get-in-touch">
    <h1 class="title">Product Insert</h1>
    <form class="contact-form">
      <div class="form-field">
        <input id="company2" name="pname" class="input-text js-input" type="text" required>
        <label class="label" for="company2">Name</label>
      </div>
      <div class="form-field">
        <input id="email2" name="pprice" class="input-text js-input" type="email" required>
        <label class="label" for="email2">Price</label>
      </div>
      <div class="form-field">
        <label class="label" for="phone2">Manufacture ID</label>
        <select id="phone2" class="input-text js-input" name="mid">
            <?php while ($row = $manufacturer_result->fetch_assoc()): ?>
                    <option value="<?= $row['id'] ?>">
                        <?= $row['id'] ?>-<?= $row['name'] ?>
                    </option>
                <?php endwhile; ?>
        </select>     
      </div>
      
      <div class="form-field">
        <input class="submit-btn" type="submit" value="Insert" name="insert">
      </div>
    </form>
  </section>
</div>
