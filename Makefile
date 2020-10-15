.PHONY: help
help: ## make taskの説明を表示する
	@grep -E '^[0-9a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

.PHONY: bash
bash: ## php server へのログイン
	docker-compose up -d
	docker-compose exec php bash
