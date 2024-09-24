<?php
function createButton($textHere, $link, $type)
{

    switch ($type) {
        case 1:
            echo '
                <a class="button button-blue" href="' . $link . '">
                    <button>
                        ' . $textHere . '
                    </button>
                </a>';
            break;
        case 2:
            echo '
                <a class="button button-red" href="' . $link . '">
                    <button>
                        ' . $textHere . '
                    </button>
                </a>';
            break;
        case 3:
            echo '
                <a class="button button-white" href="' . $link . '">
                    <button>
                        ' . $textHere . '
                    </button>
                </a>';
            break;
        case 4:
            echo '
                <a class="button button-transparent-blue" href="' . $link . '">
                    <button>
                       ' . $textHere . '
                    </button>
                </a>';
            break;
        case 5:
            echo '
                <a class="button button-transparent-white" href="' . $link . '">
                     <button>
                            ' . $textHere . '
                        </button>
                </a>';
            break;
        default:


            break;
    }
}
?>




