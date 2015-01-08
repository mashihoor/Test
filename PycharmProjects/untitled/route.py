__author__ = 'mashihoor'
import urllib

#u = urllib.urlopen('http://www.ctabustracker.com/bustime/api/v1/getvehicles?key=89dj2he89d8j3j3ksjhdue93j&vid=509,392')
u = urllib
data = u.read('http://chicago.transitapi.com/bustime/map/getStopPredictions.jsp?stop=8207&route=49')
f = open('rt22.xml', 'wb')
f.write(data)
f.close()




