<!-- FEATURES ATTENTION! -->
<!-- created class:ellipsis (kept in admin-products.scss)
        wrapped description with span, and put same text in span
     effect: description will become ellipsis, 
             and whole text will show up when user hover it -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Area | Paintings</title>
    <link rel="stylesheet" href="css/adminpanel.css">
</head>

<body>
    <!-- header begins -->
    <header class="admin-header">
        <h1 class="admin-header__title"><svg class="admin-header__title--gear-icon" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                <path d="M17 10.645v-2.29c-1.17-.417-1.907-.533-2.28-1.431-.373-.9.07-1.512.6-2.625l-1.618-1.619c-1.105.525-1.723.974-2.626.6-.9-.373-1.017-1.116-1.431-2.28h-2.29c-.412 1.158-.53 1.907-1.431 2.28h-.001c-.9.374-1.51-.07-2.625-.6l-1.617 1.619c.527 1.11.973 1.724.6 2.625-.375.901-1.123 1.019-2.281 1.431v2.289c1.155.412 1.907.531 2.28 1.431.376.908-.081 1.534-.6 2.625l1.618 1.619c1.107-.525 1.724-.974 2.625-.6h.001c.9.373 1.018 1.118 1.431 2.28h2.289c.412-1.158.53-1.905 1.437-2.282h.001c.894-.372 1.501.071 2.619.602l1.618-1.619c-.525-1.107-.974-1.723-.601-2.625.374-.899 1.126-1.019 2.282-1.43zm-8.5 1.689c-1.564 0-2.833-1.269-2.833-2.834s1.269-2.834 2.833-2.834 2.833 1.269 2.833 2.834-1.269 2.834-2.833 2.834zm15.5 4.205v-1.077c-.55-.196-.897-.251-1.073-.673-.176-.424.033-.711.282-1.236l-.762-.762c-.52.248-.811.458-1.235.283-.424-.175-.479-.525-.674-1.073h-1.076c-.194.545-.25.897-.674 1.073-.424.176-.711-.033-1.235-.283l-.762.762c.248.523.458.812.282 1.236-.176.424-.528.479-1.073.673v1.077c.544.193.897.25 1.073.673.177.427-.038.722-.282 1.236l.762.762c.521-.248.812-.458 1.235-.283.424.175.479.526.674 1.073h1.076c.194-.545.25-.897.676-1.074h.001c.421-.175.706.034 1.232.284l.762-.762c-.247-.521-.458-.812-.282-1.235s.529-.481 1.073-.674zm-4 .794c-.736 0-1.333-.597-1.333-1.333s.597-1.333 1.333-1.333 1.333.597 1.333 1.333-.597 1.333-1.333 1.333zm-4 3.071v-.808c-.412-.147-.673-.188-.805-.505s.024-.533.212-.927l-.572-.571c-.389.186-.607.344-.926.212s-.359-.394-.506-.805h-.807c-.146.409-.188.673-.506.805-.317.132-.533-.024-.926-.212l-.572.571c.187.393.344.609.212.927-.132.318-.396.359-.805.505v.808c.408.145.673.188.805.505.133.32-.028.542-.212.927l.572.571c.39-.186.608-.344.926-.212.318.132.359.395.506.805h.807c.146-.409.188-.673.507-.805h.001c.315-.131.529.025.924.213l.572-.571c-.186-.391-.344-.609-.212-.927s.397-.361.805-.506zm-3 .596c-.552 0-1-.447-1-1s.448-1 1-1 1 .447 1 1-.448 1-1 1z" /></svg>Admin panel</h1>
    </header>

    <main class="admin-main">

        <!-- sidebar begins -->
        <div class="admin-main__sidebar">
            <ul class="admin-main__sidebar--ul">
                <a href="../index.php">
                    <li><svg class="store-icon" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                            <path d="M21 13v10h-6v-6h-6v6h-6v-10h-3l12-12 12 12h-3zm-1-5.907v-5.093h-3v2.093l3 3z" /></svg>Store</li>
                </a>
                <a href="index.php">
                    <li><svg class="category-icon" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                            <path d="M7.972 2h-6.972l.714 5h2.021l-.429-3h3.694c1.112 1.388 1.952 2 4.277 2h9.283l-.2 1h2.04l.6-3h-11.723c-1.978 0-2.041-.417-3.305-2zm16.028 7h-24l2 13h20l2-13z" /></svg>Categories</li>
                </a>
                <a href="products.php" class="active">
                    <li><svg class="product-icon" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                            <path d="M4 21.832c4.587.38 2.944-4.493 7.188-4.538l1.838 1.534c.458 5.538-6.315 6.773-9.026 3.004zm14.065-7.115c1.427-2.239 5.847-9.749 5.847-9.749.352-.623-.43-1.273-.976-.813 0 0-6.572 5.714-8.511 7.525-1.532 1.432-1.539 2.086-2.035 4.447l1.68 1.4c2.227-.915 2.868-1.039 3.995-2.81zm-11.999 3.876c.666-1.134 1.748-2.977 4.447-3.262.434-2.087.607-3.3 2.547-5.112 1.373-1.282 4.938-4.409 7.021-6.229-1-2.208-4.141-4.023-8.178-3.99-6.624.055-11.956 5.465-11.903 12.092.023 2.911 1.081 5.571 2.82 7.635 1.618.429 2.376.348 3.246-1.134zm6.952-15.835c1.102-.006 2.005.881 2.016 1.983.004 1.103-.882 2.009-1.986 2.016-1.105.009-2.008-.88-2.014-1.984-.013-1.106.876-2.006 1.984-2.015zm-5.997 2.001c1.102-.01 2.008.877 2.012 1.983.012 1.106-.88 2.005-1.98 2.016-1.106.007-2.009-.881-2.016-1.988-.009-1.103.877-2.004 1.984-2.011zm-2.003 5.998c1.106-.007 2.01.882 2.016 1.985.01 1.104-.88 2.008-1.986 2.015-1.105.008-2.005-.88-2.011-1.985-.011-1.105.879-2.004 1.981-2.015zm10.031 8.532c.021 2.239-.882 3.718-1.682 4.587l-.046.044c5.255-.591 9.062-4.304 6.266-7.889-1.373 2.047-2.534 2.442-4.538 3.258z" /></svg>Products</li>
                </a>
                <a href="orders.php">
                    <li><svg class="order-icon" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                            <path d="M21.698 10.658l2.302 1.342-12.002 7-11.998-7 2.301-1.342 9.697 5.658 9.7-5.658zm-9.7 10.657l-9.697-5.658-2.301 1.343 11.998 7 12.002-7-2.302-1.342-9.7 5.657zm12.002-14.315l-12.002-7-11.998 7 11.998 7 12.002-7z" /></svg>Orders</li>
                </a>
            </ul>
        </div>
        <!-- sidebar ends -->

        <!-- content area begins -->
        <div class="admin-main__content">
            <!-- search bar begins -->
            <div class="admin-main__content--search">
                <p class="error-up">error just happens</p>
                <i class="fas fa-search"></i><input class="search-area" type="text">
                <!-- <input type="text" class="errmsg"> -->
            </div>
            <!-- search bar ends -->
            <!-- model sample here -->
            <table class="admin-main__content__products-table">
                <tr>
                    <th>TITLE</th>
                    <th>CATEGORY</th>
                    <th>IMAGE</th>
                    <th>DESCRIPTION</th>
                    <th>PRICE</th>
                    <th>STOCK</th>
                    <th><i class="fas fa-ellipsis-h"></i></th>
                </tr>
                <tr>
                    <td>Category 1</td>
                    <td>Lorem ipsum</td>
                    <td><img src="" alt="some iamges"></td>
                    <td class="ellipsis"><span title="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum libero unde hic exercitationem tempora nobis debitis?"><span class="description-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum libero unde hic exercitationem tempora nobis debitis?</span></span></td>
                    <td>899 kr</td>
                    <td>25</td>
                    <td>
                        <a href=""><i class="fas fa-pen"></i></a>
                        <a href=""><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Category 1</td>
                    <td>Lorem ipsum</td>
                    <td><img src="" alt="some iamges"></td>
                    <td class="ellipsis"><span title="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum libero unde hic exercitationem tempora nobis debitis?"><span class="description-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum libero unde hic exercitationem tempora nobis debitis?</span></span></td>
                    <td>899 kr</td>
                    <td>25</td>
                    <td>
                        <a href=""><i class="fas fa-pen"></i></a>
                        <a href=""><i class="fas fa-trash"></i></a>
                    </td>
                </tr>

            </table>
        </div>
        <!-- content area ends -->

    </main>
    <!-- main area ends -->
</body>

</html>