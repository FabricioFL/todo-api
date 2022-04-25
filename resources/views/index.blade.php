<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endpoints</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

    <main>
        <section id="endpoints" class="container">


            <div class="row p-3">
                <div class="col">
                    <h2 class="lead">/api <span class="badge bg-primary">GET</span></h2>

                    <a class="btn btn-dark" data-bs-toggle="collapse" href="#receive" role="button" aria-expanded="false" aria-controls="receive">
                        Receive
                    </a>
                    <div class="collapse" id="receive">
                        <div class="card card-body p-3">
                          <pre class="lead">
                              {
                                  "id" : 1,
                                  "title" : "the title of your todo",
                                  "description" : "the description of your todo",
                                  "is_done" : false,
                                  "created_at" : "xxxx-xx-xx xx:xx",
                                  "updated_at" : "xxxx-xx-xx xx:xx"
                              }
                          </pre>
                        </div>
                    </div>

                </div>
            </div>


            <div class="row p-3">
                <div class="col">

                    <h2 class="lead">/api/todo/create <span class="badge bg-success">POST</span></h2>
                    <a class="btn btn-dark" data-bs-toggle="collapse" href="#sendCreate" role="button" aria-expanded="false" aria-controls="sendCreate">
                        Send
                    </a>
                    <div class="collapse" id="sendCreate">
                        <div class="card card-body p-3">
                          <pre class="lead">
                              {
                                  "title" : "the title of your todo",
                                  "description" : "the description of your todo"
                              }
                          </pre>
                        </div>
                    </div>

                    <a class="btn btn-dark" data-bs-toggle="collapse" href="#receiveCreate" role="button" aria-expanded="false" aria-controls="receiveCreate">
                        Receive
                    </a>
                    <div class="collapse" id="receiveCreate">
                        <div class="card card-body p-3">
                          <pre class="lead">
                              {
                                  "message" : "ok"
                              }
                          </pre>
                        </div>
                    </div>

                </div>
            </div>


            <div class="row p-3">
                <div class="col">
                    <h2 class="lead">/api/todo/update <span class="badge bg-warning">PUT</span></h2>

                    <a class="btn btn-dark" data-bs-toggle="collapse" href="#sendUpdate" role="button" aria-expanded="false" aria-controls="sendUpdate">
                        Send
                    </a>
                    <div class="collapse" id="sendUpdate">
                        <div class="card card-body p-3">
                          <pre class="lead">
                              {
                                "title" : "the title of your todo",
                                "new_title" : "the new title of your todo",
                                "new_description" : "the new description of your todo",
                                "new_is_done" : false
                              }
                          </pre>
                        </div>
                    </div>

                    <a class="btn btn-dark" data-bs-toggle="collapse" href="#receiveUpdate" role="button" aria-expanded="false" aria-controls="receiveUpdate">
                        Receive
                    </a>
                    <div class="collapse" id="receiveUpdate">
                        <div class="card card-body p-3">
                          <pre class="lead">
                              {
                                  "message" : "ok"
                              }
                          </pre>
                        </div>
                    </div>

                </div>
            </div>


            <div class="row p-3">
                <div class="col">
                    <h2 class="lead">/api/todo/remove <span class="badge bg-success">POST</span></h2>

                    <a class="btn btn-dark" data-bs-toggle="collapse" href="#sendDelete" role="button" aria-expanded="false" aria-controls="sendDelete">
                        Send
                    </a>
                    <div class="collapse" id="sendDelete">
                        <div class="card card-body p-3">
                          <pre class="lead">
                              {
                                  "title" : "the title of your todo"
                              }
                          </pre>
                        </div>
                    </div>

                    <a class="btn btn-dark" data-bs-toggle="collapse" href="#receiveDelete" role="button" aria-expanded="false" aria-controls="receiveDelete">
                        Receive
                    </a>
                    <div class="collapse" id="receiveDelete">
                        <div class="card card-body p-3">
                          <pre class="lead">
                              {
                                  "message" : "ok"
                              }
                          </pre>
                        </div>
                    </div>

                </div>
            </div>


        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>