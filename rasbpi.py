import RPi.GPIO as GPIO
import urllib2
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BOARD)
GPIO.setup(11,GPIO.OUT)
true = 1
while(true):
                try:
                        response = urllib2.urlopen('http://192.168.0.177/buttonStatus.php')
                        status = response.read()
                except urllib2.HTTPError, e:
                                        print e.code

                except urllib2.URLError, e:
                                        print e.args

                print status
                if status=='ON':
                                GPIO.output(11,False)
                elif status=='OFF':
                                GPIO.output(11,True)

