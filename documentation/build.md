generate exports

```
docker run --rm -v$(pwd):/app node \
bash -c "cd /app && npm install && npm run export"
```
