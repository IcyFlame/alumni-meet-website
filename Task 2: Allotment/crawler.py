#Semicolon delimited files will be generated out of this program

delimiter = ";"

# Non Technical Part

data_array = ["Any","Accounting","Arts and Crafts","Banking Finance","Business Administration","Communications","Consulting","Dance","Education Management","Enterpreneurship","Event Management","Fashion Designing","Film and Media","Finance","Government Administrations","Government Relations","Graphic Design","Hotel Management","Human Relations","International Affairs","International Business","Journalism","Law enforcement","Legal Services","Market research","Marketing and Advertising","Music","Operations","Real Estate","Risk Mangement and Insurance","Sports","Systems","Visual Arts","Writing and Editing","Others"]

filout = open("non-technical.csv", "w")

for i, j in enumerate(data_array):

    filout.write(j + delimiter + str(i+1) + "\n")

filout.close()    

# Technical Part

shift = len(data_array)

import re as re

nameofdep = re.compile(r'.*areasofinterest\["(.*)"\]')

##explanation of the regex
##
##any character before it in the same line does not matter, because
##all lines that we need start with areas of interest. after there comes
##a square bracket, a double quote, after that the group of characters that we want to extract
##so we put it inside round brackets. after this a double quote followed by a
##closing square bracket.

areasofinterest = re.compile(r'"(.*?)"')

dicts = {} # we can't use dictionary as dictionaries don't support ordering
           # and in this case we need ordering.

filin = open("input.txt", "r")

depnames = []
all_aois = []

for line in filin:

    # print line

    if nameofdep.match(line):

        depName = nameofdep.findall(line)[0]

        aoi = areasofinterest.findall(line)

        aoi.reverse()
        aoi.pop()
        aoi.reverse()

        dicts[depName] = aoi

        depnames.append(depName)
        all_aois.append(aoi)

filin.close()        

##Now the two lists are ready. We can create the csv file.

filout = open("technical.csv", "w")

overallCount = shift + 1

for i, dep in enumerate(depnames):

    for aoi in all_aois[i]:

        filout.write(dep + ": " + aoi + delimiter + str(overallCount) + "\n")
        overallCount += 1

filout.close()
