<style>
    body{
        background-image: url("Assets/img/bg-cinema-10.png");
    }
    .container_thongtin {
        margin-top: 200px;
        border: 2px solid #ccc;
        width: 550px;
        height: 700px;
        margin-left: 460px;
        background: #1c262f;
    }
    .container_thongtin input{
        background: #37424b;
    }
    .images {
        display: flex;
        padding: 10px;
        border-bottom: 1px solid #ccc;
    }

    .thong_tin_user {
        display: flex;
        padding: 30px 0;
    }
    .thong_tin_user li{
        padding: 10px 20px;
    }
    .thong_tin_user label {
        padding-top: 10px;
        color: #bfc9d2;
        font-weight: 700;
    }

    .thong_tin_user input {
        width: 350px;
        height: 40px;
    }
    .giao_dich{
        width: 1100px;
        border: 1px solid #40a933;
        border-radius: 5px;
        padding: 40px 0;
        margin-left: 200px;
        background-color: #39454f;
        color: #fff;
        margin-top: 20px;
        margin-bottom: 80px;
    }
    .giao_dich ul{
        display: flex;
        justify-content: center;
       
    }
    .giao_dich li{
        padding: 0 25px;
        border: 1px solid #ccc;
    }
    .giao_dich h3{
        color: #fff;
        padding-left: 25px;
        padding-bottom: 15px;
    }
</style>

<div class="container_thongtin">
    <div class="images">
        <img src="Assets/img/avatar.png" alt="" style="width: 150px; height: 200px; border-radius: 5px;">
        <div style="padding: 0 30px;">
            <p>Vui lòng đăng ảnh chân dung, thấy rõ mặt có kích thước: ngang 150 pixel và dọc 200 pixel (dung lượng dưới 1MB)</p>
            <p style="color: #e4d804;" >Phạm Xuân Trường</p>
        </div>
    </div>
    <div class="thong_tin_user">
        <ul>
            <li>
                <label for="">Email</label>
            </li>
            <li>
                <label for="">Mật khẩu</label>
            </li>
            <li>
                <label for="">Họ(*)</label>
            </li>
            <li>
                <label for="">Tên(*)</label>
            </li>
            <li>
                <label for="">Giới tính(*)</label>
            </li>
            <li>
                <label for="">Địa chỉ</label>
            </li>
            <li>
                <label for="">Thành phố</label>
            </li>
        </ul>

        <ul>
            <li>
                <input type="text" placeholder="">
            </li>
            <li>
                <input type="password">
            </li>
            <li>
                <input type="text" placeholder="">
            </li>
            <li>
                <input type="text" placeholder="">
            </li>
            <li>
                <input type="text" placeholder="">
            </li>
            <li>
                <input type="text">
            </li>
            <li>
                <input type="text">
            </li>
        </ul>
       
    </div>
  

</div>
<br>

<div class="giao_dich">
<h3>TRANSACTIONS</h3>
  <ul>
    <li>
        <p>No</p>
    </li>
    <li>
        <p>TransactionTime</p>
    </li>
    <li>
        <p>TransNumber</p>
    </li>
    <li>
        <p>Site</p>
    </li>
    <li>
        <p>ItemName</p>
    </li>
    <li>
        <p>Quantity</p>
    </li>
    <li>
        <p>Spent</p>
    </li>
    <li>
        <p>Movie</p>
    </li>
    <li>
        <p>Trạng thái vé</p>
        <p>
    </p>
    </li>
  </ul>
    
</div>
