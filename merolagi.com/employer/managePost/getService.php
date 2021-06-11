<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
//Global Imports
?>
<thead class=" thead-dark">
    <th scope="col"><span class="l-thead">SN.</span></th>
    <th scope="col"><span class="l-thead">Service Title</span></th>
    <th scope="col"><span class="l-thead"></span></th>
    <th scope="col"><span class="l-thead"></span></th>
    <th scope="col"><span class="l-thead">Responses</span></th>
    <th scope="col" class="text-right"><span class="l-thead">Controls</span></th>
</thead>
<tbody>
    <?php
    $sqlAllPost = "SELECT * FROM `service_info` WHERE employerUniqueId='" . $_SESSION['employerId'] . "' and display<>'off' order by id desc";
    $sqlAllPost = mysqli_query($conn2, $sqlAllPost);
    $i = 1;
    while ($sqlAllPostData = mysqli_fetch_assoc($sqlAllPost)) {
    ?>
        <tr>
            <th scope="col" colspan="1"><?php echo $i; ?></th>
            <th scope="col" colspan="3"><span class="l-post-title"><a href="/servicedetail/<?php echo $sqlAllPostData['id'] ?>"><?php echo ucwords($sqlAllPostData['serviceName']) ?></a></span></th>
            <th scope="col"><a href="/employer/manageServices/responses/index.php?productId=<?php echo $sqlAllPostData['productUniqueId'] ?>" class="btn btn-success btn-sm">Response</a></th>
            <th scope="col" class="text-right"><a href="/employer/manageServices/editPost/index.php?productId=<?php echo $sqlAllPostData['productUniqueId'] ?>"><button type="button" class="btn btn-warning btn-sm"><span class="fas fa-edit"></button></span></a><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#deleteModalSevices<?php echo $i ?>" class=" btn btn-info"><span class="fas fa-tasks"></span></button><a href=""><button class="btn btn-secondary btn-sm"><span class="fas fa-chart-pie"></button></span></a>
                <div class="modal " id="deleteModalSevices<?php echo $i ?>">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                Control:
                            </div>
                            <form method="POST" action="deleteAction.php?productId=<?php echo $sqlAllPostData['productUniqueId'] ?>" class="modal-body text-left">
                                DELETE THIS POST?
                                <button type="submit" name="trashService" class="btn btn-danger"><span class="fas fa-trash"></span></button>
                            </form>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </th>
        </tr>
    <?php
        $i++;
    }
    ?>
</tbody>