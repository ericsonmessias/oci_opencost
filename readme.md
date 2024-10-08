## Link de instalação do opencost
https://www.opencost.io/docs/configuration/oracle

## Comando para acessar o opencost
kubectl port-forward --namespace opencost service/opencost 9003 9090

## Instação ArgoCD
kubectl create namespace argocd
kubectl apply -n argocd -f https://raw.githubusercontent.com/argoproj/argo-cd/stable/manifests/install.yaml

## Link de instalação do ingress controller
https://docs.oracle.com/en-us/iaas/Content/ContEng/Tasks/contengsettingupingresscontroller.htm#settingupcontroller__creatingserviceaccount