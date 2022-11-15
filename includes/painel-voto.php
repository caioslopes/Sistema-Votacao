<div class="corpo">
    <div>
        <div class="conteudo">
            <div class="titulo">
                <h1>Selecione seu voto</h1>
            </div>
            <div class="formularios">
                <div class="selecao-voto">
                    <form action="agradecimento.php" method="POST">
                        <div class="caixa-candidato">
                            <button type="button" onclick="Candidato()" class="btn-ativar">
                            <svg id="candidato-id" class="svg-candidato" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                            </button>              
                        <label for="">Maria</label>
                        <input type="hidden" name="voto" value = "1">
                        </div>
                        <input style="display:none;" id="btn-confirmar" type="submit" name="confirmar-voto" value="Confirmar">
                    </form>
                </div>
                <div class="selecao-voto">
                    <form action="agradecimento.php" method="POST">
                        <div class="caixa-candidato">
                        <button type="button" onclick="Nulo()" class="btn-ativar">
                            <svg id="nulo-id" class="svg-candidato" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                        </button>     
                        <label for="">Nulo</label>
                        <input type="hidden" name="nulo" value = "1">
                        </div>

                        <input style="display:none;" id="btn-confirmar-nulo"  type="submit" name="confirmar-nulo" value="Confirmar">
                    </form>
                </div>
            </div>
    </div>
</div>

