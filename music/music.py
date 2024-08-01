import sys
from time import sleep

def print_lyrics():
    lines = [
        ("Aku yang jatuh cinta", 0.06),
        ("Haruskah kau kuberi kesempatan", 0.07),
        ("Ingin aku jadi kekasih yang baik", 0.07),
        ("Berikan aku kesempatan oh...", 0.08),
        ("Tahukah dirimu, tahukah hatimu?", 0.06),
        ("Berulamg keketuk aku, aku mencintaimu", 0.08),
        ("Tapi dirimu, tak pernah sadari", 0.05),
        ("Akuyang jatuh cinta", 0.10),
    ]
    delays = [2.5, 3, 2.5, 7.5, 3.5, 4, 3.2, 3.5]

    for i, (line, char_delay) in enumerate(lines):
        for char in line:
            print(char, end='')
            sys.stdout.flush()
            sleep(char_delay)
        sleep(delays[i])
        print('')

print_lyrics()    