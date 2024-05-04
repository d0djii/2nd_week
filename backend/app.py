import pymorphy2
import pandas as pd
from docxtpl import DocxTemplate
import sys

# pip install docxtpl
# pip instal pandas
# pip install pymorphy2



# Генерация документа
def generateWordFile(labels, pathTemplate, pathNewFile):
    doc = DocxTemplate(pathTemplate)
    doc.render(labels)
    doc.save(pathNewFile)

# Меняем падеж
def swapWordCase(word, case):
    morph = pymorphy2.MorphAnalyzer()
    parsed_word = morph.parse(word)[0]
    return (parsed_word.inflect({case}).word)

labels = {
    'type_of_practice': sys.argv[1],
    'practice_place': sys.argv[2],
    #'course': sys.argv[3],
    #'group': sys.argv[4],
    #'student_full_name': sys.argv[5],
    #'practice_place': sys.argv[6],

}
# CSV - не забудьте указать путь !!!
df = pd.read_csv("csv/tasks.csv")

# Генерация таблицы на основе CSV
TASKS = []
for _, row in df.iterrows(): TASKS.append({"data": str(row.iloc[6]), "name": str(row.iloc[4]), "empty": ""})

labels["tasks"] = TASKS



# Генерация документ файла
generateWordFile(labels, "template.docx", "newfile.docx")