import requests

# base url of api
BASE_URL = 'https://swapi.co/api/'


def _send(uri: str):
    return requests.get('{}{}'.format(BASE_URL, uri))


def search(resource, query):
    return _send('{}/?search={}'.format(resource, query))


def get_resource_by_id(resource, id):
    return _send('{}/{}'.format(resource, id))


def get_resource_all(resource):
    return _send('{}/'.format(resource))
