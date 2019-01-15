import starwars


r = starwars.get_resource_by_id('people', 2)
print(r.json())
