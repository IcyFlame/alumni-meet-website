# all csv files used inside this program are delimited using
# a semicolon

delim = ";"

inputfile = "data.csv"
outputfile = "alloted.csv"
notAlloted = "notalloted.csv"

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

filin = open(inputfile, "r")

filout = open(outputfile, "w")

##couldNotAllot = open(notAlloted, "w")

##all_there = range(1, 842, 1)

for i in filin:

    # the first index contains the record number.

    record = i.split(delim)

##    record.reverse()
##    count = record.pop()
##    record.reverse()

    # print record

##    for k, j in enumerate(record):
##
##        print k, " : ", j
##
##    break

    try:

        index1 = dicts[record[1]]
        index2 = dicts[record[4]]
        index3 = dicts[record[7]]

##        all_there.remove(int(count))

    except:

        # print i

        filout.write(i)
##        all_there.remove(int(count))

        continue

    filout.write(record[0] + delim + record[1] + delim + index1 + delim +\
                 record[3] + delim + record[4] + delim + index2 + delim +\
                 record[6] + delim + record[7] + delim + index3 + "\n")

filin.close()
filout.close()
##
##print all_there
##print len(all_there)
