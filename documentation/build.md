generate exports

```
docker run --rm -v$(pwd):/app node bash -c "cd /app && npm install && npm run postinstall && npm run export"
```
