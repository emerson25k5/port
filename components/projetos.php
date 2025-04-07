    <!-- Projeto -->
    <section id="projetos" class="space-y-3 py-6">

        <h2 class="text-2xl font-bold gap-x-6 py-6">Meus projetos</h2>

        <?php foreach (getProjetos() as $projeto) : ?>
            <div class="flex justify-between rounded-lg p-3 bg-slate-800">

                <!-- Foto do projeto -->
                <div class="w-1/5">
                    <img src="./imagens/proj_<?=$projeto['path']?>.png" alt="Imagem do projeto">
                </div>

                <!-- Conteudo -->
                <div class="w-4/5 space-y-3 pl-5">
                    <div class="flex gap-x-3 justify-between">

                        <h3 class="font-semibold text-xl">
                            <?= $projeto['nome'] ?> <span class="text-gray-500 text-xs italic">(<?= $projeto['status'] ?> - <?= $projeto['ano'] ?>)</span>
                        </h3>

                        <div class="space-x-1">
                            <?php
                            $colors = getColorStack();
                            foreach ($projeto['stack'] as $lang):?>
                                <span class="bg-<?=$colors[$lang]?>-500 rounded-md font-semibold text-xs text-slate-800 px-2 py-1">
                                    <?=$lang?>
                                </span>
                            <?php endforeach; ?>
                        </div>

                    </div>

                    <p class="leading-6 ">
                        <?= $projeto['descricao'] ?>
                    </p>
                </div>

            </div>
        <?php endforeach; ?>

    </section>