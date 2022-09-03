<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Copa do Mundo</title>
</head>

<body>

    <h1>Vamos ver se você é brasileiro de verdade…</h1>
    <?php

    $Questions = array(
        1 => array(
            'Question' => '1. Qual é o maior artilheiro brasileiro das Copas do Mundo?',
            'Answers' => array(
                'A' => 'Ronaldo Fenômeno',
                'B' => 'Pelé',
                'C' => 'Romario',
                'D' => 'Neymar'
            ),
            'CorrectAnswer' => 'A'
        ),
        2 => array(
            'Question' => '2. Em qual ano o  Brasil foi campeão de uma Copa do Mundo pela primeira vez?',
            'Answers' => array(
                'A' => '1962',
                'B' => '1958',
                'C' => '1970',
                'D' => '1974'
            ),
            'CorrectAnswer' => 'B'
        ),

        3 => array(
            'Question' => '3. Quantas Copas do Mundo foram sediadas no Brasil?',
            'Answers' => array(
                'A' => '1',
                'B' => '2',
                'C' => '3',
                'D' => '4',
            ),
            'CorrectAnswer' => 'B'
        ),

        4 => array(
            'Question' => '4. Quantas Copas do Mundo o Pelé ganhou?',
            'Answers' => array(
                'A' => '2',
                'B' => '3',
                'C' => '1',
                'D' => '4'
            ),
            'CorrectAnswer' => 'B'
        ),

        5 => array(
            'Question' => '5. Qual era o técnico do Brasil que venceu a Copa do Mundo de 2002?',
            'Answers' => array(
                'A' => 'Parrera',
                'B' => 'Telê Santana',
                'C' => 'Zagallo',
                'D' => 'Felipão'
            ),
            'CorrectAnswer' => 'D'
        ),

        6 => array(
            'Question' => '6. Qual seleção foi responsável pela pior derrota do Brasil nas Copas do Mundo?',
            'Answers' => array(
                'A' => 'Espanha',
                'B' => 'Alemanha',
                'C' => 'Itália',
                'D' => 'França'
            ),
            'CorrectAnswer' => 'B'
        ),

        7 => array(
            'Question' => '7. Em qual estádio o Brasil estreou na Copa do Mundo de 2014?',
            'Answers' => array(
                'A' => 'Morumbi',
                'B' => 'Maracanã',
                'C' => 'Arena Corinthians',
                'D' => 'Mineirão'
            ),
            'CorrectAnswer' => 'C'
        ),

        8 => array(
            'Question' => '8. Qual animal foi usado de mascote pelo Brasil na Copa do Mundo de 2014?',
            'Answers' => array(
                'A' => 'Arara-Azul',
                'B' => 'Mico-Leão-Dourado',
                'C' => 'Canarinho',
                'D' => 'Tatu-Bola'
            ),
            'CorrectAnswer' => 'D'
        ),

        9 => array(
            'Question' => '9. De quantas finais de Copa do Mundo o Brasil participou ?',
            'Answers' => array(
                'A' => '6',
                'B' => '8',
                'C' => '7',
                'D' => '5'
            ),
            'CorrectAnswer' => 'C'
        ),

        10 => array(
            'Question' => '10. Qual é o placar da goleada aplicada pelo Brasil em uma Copa do Mundo?',
            'Answers' => array(
                'A' => 'Brasil 6 x 1 Espanha',
                'B' => 'Brasil 8 x 0 China',
                'C' => 'Brasil 5 x 0 México',
                'D' => 'Brasil 7 x 1 Suécia '
            ),
            'CorrectAnswer' => 'D'
        ),
    );
    $counter = 0;
    if (isset($_POST['answers'])) {
        $Answers = $_POST['answers'];

        foreach ($Questions as $QuestionNo => $Value) {
            // Echo the question
            echo $Value['Question'] . '<br />';

            if ($Answers[$QuestionNo] != $Value['CorrectAnswer']) {
                echo 'Você marcou: <span style="color: red;">' . $Value['Answers'][$Answers[$QuestionNo]] . '</span><br>';
                echo 'Resposta correta: <span style="color: green;">' . $Value['Answers'][$Value['CorrectAnswer']] . '</span>';
            } else {
                echo 'Você marcou: <span style="color: green;">' . $Value['Answers'][$Answers[$QuestionNo]] . '</span><br>';
                echo 'Resposta correta: <span style="color: green;">' . $Value['Answers'][$Answers[$QuestionNo]] . '</span>';
                $counter++;
            }

            echo '<br /><hr>';
            if ($counter == "") {
                $counter = '0';
                $results = "Sua pontuação: $counter/10";
            } else {
                $results = "Sua pontuação: $counter/10";
            }
        }
        echo $results;
    } else {
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="quiz">
            <?php foreach ($Questions as $QuestionNo => $Value) { ?>

                <h3><?php echo $Value['Question']; ?></h3>
                <?php
                foreach ($Value['Answers'] as $Letter => $Answer) {
                    $Label = 'question-' . $QuestionNo . '-answers-' . $Letter;
                ?>
                    <div>
                        <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" />
                        <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
                    </div>
                <?php } ?>

            <?php } ?>
            <input type="submit" value="Continue" />
        </form>
    <?php
    }
    ?>
</body>

</html>
