# Test for country
import pickle

with open('land.pkl', 'rb') as f:
    land = pickle.load(f)

desc = "The rich volcanic soils of the Kivu lakeshores are fertile ground for Congo's farmers to bring you this mild coffee's fruity and sweet cereal notes.  A smooth organic coffee with toasted cereal notes, nutty aromas and mild fruitiness."


country = ""
for i in land:
    if land[i] in desc:
        country = land[i]

print(country)
