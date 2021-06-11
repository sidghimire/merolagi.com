
<div class="l-body-container-1 row no-gutters">
    <div class="col-md-2 l-header-tag text-center">
        <span class="l-header-tag-text-2 text-center">
            <a href="/" class="l-header-tag-link"> merolagi.com</a>
        </span>
    </div>
    <div class="col-md-7 ">

        <form method="GET" action="/frontend/search/index.php" class="row no-gutters l-search-field-header-small">

            <input type="text" name="search" class="l-header-form-control l-search-field col-8" placeholder="Search For Products/ Services" name="product" value="<?php if (isset($_GET['search'])) {
                                                                                                                                                                        echo $_GET['search'];
                                                                                                                                                                    } ?>">
            <input type="submit" class="l-header-form-control btn btn-dark col-2 l-search-btn" value="Search" name="searchBtn">
        </form>
    </div>
    <div class="col-md-3">
        <div class="row no-gutters l-header-side">
            <div class="l-header-side-div align-right">
                <a href="/employer/logout/"><button type="button" class="btn btn-secondary l-btn-secondary"><span class="fas fa-sign-out-alt"></span>Logout</button></a>
            </div>
        </div>
    </div>
</div>