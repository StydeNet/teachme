@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h2 class="title-show">
                Magnam impedit voluptatibus architecto quidem iste eum ut.
                <span class="label label-info absolute highlight">abierta</span>

            </h2>
            <h4 class="label label-info news">
                9 votos            </h4>

            <p class="vote-users">
                <span class="label label-info">Eddie Reilly I</span>
                <span class="label label-info">Letha Marks</span>
                <span class="label label-info">Orpha Quitzon</span>
                <span class="label label-info">Orpha Quitzon</span>
                <span class="label label-info">Orpha Quitzon</span>
                <span class="label label-info">Prof. Robbie Russel V</span>
                <span class="label label-info">Juanita Senger</span>
                <span class="label label-info">Geo Armstrong PhD</span>
                <span class="label label-info">Prof. Ruthe Keebler I</span>
            </p>

            <form method="POST" action="http://teachme.dev/votar/5" accept-charset="UTF-8"><input name="_token" type="hidden" value="VBIv3EWDAIQuLRW0cGwNQ4OsDKoRhnK2fAEF6UbQ">
                <!--button type="submit" class="btn btn-primary">Votar</button-->
                <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-thumbs-up"></span> Votar
                </button>
            </form>

            <h3>Nuevo Comentario</h3>


            <form method="POST" action="http://teachme.dev/comentar/5" accept-charset="UTF-8"><input name="_token" type="hidden" value="VBIv3EWDAIQuLRW0cGwNQ4OsDKoRhnK2fAEF6UbQ">
                <div class="form-group">
                    <label for="comment">Comentarios:</label>
                    <textarea rows="4" class="form-control" name="comment" cols="50" id="comment"></textarea>
                </div>
                <div class="form-group">
                    <label for="link">Enlace:</label>
                    <input class="form-control" name="link" type="text" id="link">
                </div>
                <button type="submit" class="btn btn-primary">Enviar comentario</button>
            </form>

            <h3>Comentarios (6)</h3>

            <div class="well well-sm">
                <p><strong>Gene Wintheiser</strong></p>
                <p>Non consectetur sequi facilis nihil qui corporis. Autem saepe ut officiis sed est facilis. Officia quam at vel rerum sunt. Sequi vel quibusdam molestias delectus officia.</p>
                <p class="date-t"><span class="glyphicon glyphicon-time"></span> 01/04/2015 12:21am</p>
            </div>
            <div class="well well-sm">
                <p><strong>Simone Herzog</strong></p>
                <p>Nostrum tenetur minus repellat. Iusto vitae perferendis optio praesentium harum quos. Quaerat aspernatur dolorem quos omnis culpa eos. Et ab omnis quia in dolorem provident qui.</p>
                <p class="date-t"><span class="glyphicon glyphicon-time"></span> 01/04/2015 12:21am</p>
            </div>
            <div class="well well-sm">
                <p><strong>Hailie Daniel</strong></p>
                <p>Unde earum quia quia aliquid. Autem voluptatem et quae veritatis nihil suscipit ut. In qui est qui rerum autem aut voluptatem. Corrupti nobis inventore voluptate et quia ea. Dicta qui ut in.</p>
                <p class="date-t"><span class="glyphicon glyphicon-time"></span> 01/04/2015 12:21am</p>
            </div>
            <div class="well well-sm">
                <p><strong>Ms. Carmella Herman II</strong></p>
                <p>Numquam suscipit optio blanditiis aut soluta laborum sequi est. Reiciendis fuga nihil blanditiis veniam repellat quia explicabo. Voluptates corrupti nihil porro voluptas voluptatem temporibus repellat quaerat. Qui saepe rerum officia numquam et ex voluptatem. Cum eum eum repudiandae dolorem voluptas.</p>
                <p class="date-t"><span class="glyphicon glyphicon-time"></span> 01/04/2015 12:21am</p>
            </div>
            <div class="well well-sm">
                <p><strong>Cierra Boyle III</strong></p>
                <p>Omnis ut laudantium itaque optio nihil. Rerum magnam recusandae quia quisquam delectus et sint possimus. Nostrum perspiciatis illo et ut sed perferendis.</p>
                <p class="date-t"><span class="glyphicon glyphicon-time"></span> 01/04/2015 12:21am</p>
            </div>
            <div class="well well-sm">
                <p><strong>Kayla Gerlach</strong></p>
                <p>Est consectetur mollitia natus nam. Sequi laborum alias nam excepturi laudantium nulla. Mollitia suscipit cum fugiat. Incidunt tempore velit molestiae quo aspernatur quidem.</p>
                <p class="date-t"><span class="glyphicon glyphicon-time"></span> 01/04/2015 12:21am</p>
            </div>
        </div>
    </div>
</div>

@endsection