from subprocess import check_output
#import json
import sys

#config = check_output ("php -r 'echo $array;'", shell = True)
#config = check_output(['php', '-r', 'echo json_encode(include "stud.php");'])
#config = json.loads(config)
#print(config)
print('HELLO')
# Все методы и переменные сохраняем, меняем только строки-значения на запросы
labels = {
    'practice_place': sys.argv[1]
}
print(labels['practice_place'])