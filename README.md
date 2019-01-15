# StarWars Python Client

simple Python client for [StarWars Api](https://swapi.co)

## Usage

```python
r = starwars.get_resource_by_id('people', 2)
r = starwars.get_resource_all('people')
r = starwars.search('people', 'Luke Skywalker')
# Print output in the format of dictionary
print(r.json())
```