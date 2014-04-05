delim = ";"

filin = open("data.csv", "r")

filout = open("newData.csv", "w")

k = filin.readlines()

for j, line in enumerate(k):

    filout.write(str(j+1) + delim + line)

filin.close()
filout.close()
