<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Queue App</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/queue.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/queue.js"></script>
    </head>
    <body>
        <h1>Queue App</h1>
        <div class="container">
        <div>
            <div class="panel panel-default half-panel">
                <div class="panel-heading">New Customer</div>
                <div class="panel-body">
                    <form id="queue-application-form" action="index.php?action=saveCitizen" method="post">
                        <div class="form-group">
                            <label>Services</label>
                            <?php foreach($services as $key => $service): ?>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="service" <?php echo ($key==0 ? 'checked="checked"' : '');?>value="<?=$service->getId();?>"><?=$service->getName();?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="btn-group btn-toggle form-group" data-toggle="buttons">
                            <label class="btn btn-primary active type-toggle">
                                <input type="radio" name="type" value="citizen"> Citizen
                            </label>
                            <label class="btn btn-default type-toggle">
                                <input type="radio" name="type" value="organisation" checked=""> Organisation
                            </label>
                            <label class="btn btn-default type-toggle">
                                <input type="radio" name="type" value="anonymous" checked=""> Anonymous
                            </label>
                        </div>

                        <div class="citizen-form">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <select class="form-control" name="title" id="title">
                                    <option>Mr</option>
                                    <option>Mrs</option>
                                    <option>Miss</option>
                                    <option>Dr</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="first_name">First name</label>
                                <input type="text" class="form-control" name="first_name" id="first_name">
                            </div>

                            <div class="form-group">
                                <label for="last_name">Last name</label>
                                <input type="text" class="form-control" name="last_name" id="last_name">
                            </div>
                        </div>

                        <div class="organisation-form" style="display: none">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                        </div>

                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

            <div class="panel panel-default half-panel">
                <div class="panel-heading">Queue</div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th>Name</th>
                            <th>Service</th>
                            <th>Queued at</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($customers as $key => $customer): ?>
                            <tr>
                                <td><?= ($key + 1); ?></td>
                                <td><?= $customer->getTitle(); ?></td>
                                <td><?= $customer->getFirstName() . ' ' . $customer->getLastName(); ?></td>
                                <td>Housing</td>
                                <td>9:00</td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
