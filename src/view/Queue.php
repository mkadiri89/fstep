<!DOCTYPE html>
<html lang="en">
    <head>
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
                    <form>
                        <div class="form-group">
                            <label>Services</label>
                            <?php foreach($services as $service): ?>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="service" value="<?=$service->getId();?>"><?=$service->getName();?>
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
                                <label for="sel1">Title</label>
                                <select class="form-control" id="sel1">
                                    <option>Mr</option>
                                    <option>Mrs</option>
                                    <option>Miss</option>
                                    <option>Dr</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="first_name">First name</label>
                                <input type="text" class="form-control" id="first_name">
                            </div>

                            <div class="form-group">
                                <label for="last_name">Last name</label>
                                <input type="text" class="form-control" id="last_name">
                            </div>
                        </div>

                        <div class="organisation-form" style="display: none">
                            <div class="form-group">
                                <label for="first_name">Name</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                        </div>

                        <br>
                        <button type="button" class="btn btn-primary">Submit</button>
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
                                <td><?= $key; ?></td>
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
