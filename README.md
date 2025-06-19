# Men-s-Fashion-Website

---

## 🖥️ Setup Instructions

1. **Clone this repository:**
    ```bash
    git clone https://github.com/AnchalJaiswal19/mens-fashion-website.git
    cd mens-fashion-website
    ```

2. **Run XAMPP or WAMP** and start Apache & MySQL.

3. **Import Database:**
    - Open phpMyAdmin or your DB tool.
    - Create a new database (e.g., `mens_fashion_db`).
    - Import `database/init_db.sql` to set up tables and sample data.

4. **Configure Database Connection:**
    - Update `php/config.php` (create if not present) with:
      ```php
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "mens_fashion_db";
      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      ?>
      ```

5. **Launch in Browser:**
    - Place files under XAMPP’s `htdocs` (e.g., `C:/xampp/htdocs/mens-fashion-website/`).
    - Navigate to: `http://localhost/mens-fashion-website/`

---

## 📋 Usage Instructions

- **Register User:** Create an account via the registration form.
- **Login:** Access the website as a registered user.
- **Browse Products:** Explore the catalog and view product details.
- **Add to Cart (if implemented):** Select items to purchase.

---

## ⚙️ Future Enhancements

- Add shopping cart functionality with session storage.
- Integrate order processing and payment gateway.
- Optimize images and add lazy loading.
- Improve UI with CSS frameworks like Bootstrap or Tailwind.
- Secure user data with password hashing and form sanitization.

---

## This is our Website Interface

[Website_Interface](https://github.com/AnchalJaiswal19/Men-s-Fashion-Website/Website_interface.jpg)

## 📝 Author

**Anchal Jaiswal**  
- GitHub: [@AnchalJaiswal19](https://github.com/AnchalJaiswal19)  
- Email: anchaljaiswal4040@gmail.com  

Feel free to reach out for feedback or collaboration!

---

