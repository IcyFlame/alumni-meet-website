# all csv files used inside this program are delimited using
# a semicolon

delim = ";"

# create the dictionary with the name of the interest as keys
# and the numbers allotted to the same as values.

filin = open("technical.csv", "r")

dicts = {}

for i in filin:

    i = i[:-1] # remove the \n at the end of each line.

    dicts[i.split(delim)[0]] = i.split(";")[1]

filin.close()
filin = open("non-technical.csv", "r")

for i in filin:

    i = i[:-1] # remove the \n at the end of each line.

    dicts[i.split(delim)[0]] = i.split(";")[1]

filin.close()
# print dicts

# start the allotment

filin = open("data.csv", "r")

filout = open("alloted.csv", "w")

for i in filin:

    record = i.split(delim)

    for k, j in enumerate(record):

        print k, " : ", j

    break

    try:

        index = dicts[record[1]]

    except:

        filout.write(i)

        continue

    filout.write(record[0] + delim + record[1] + delim + \
                 index + "\n")

filin.close()
filout.close()
