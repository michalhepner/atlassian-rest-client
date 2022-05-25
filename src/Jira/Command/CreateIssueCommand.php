<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Jira\Command;

use MichalHepner\AtlassianRestClient\ClientInterface;
use MichalHepner\AtlassianRestClient\Exception\ClientException;
use MichalHepner\AtlassianRestClient\Exception\CommandException;
use MichalHepner\AtlassianRestClient\Factory\ModelFactory;
use MichalHepner\AtlassianRestClient\Jira\Endpoint;
use MichalHepner\AtlassianRestClient\Jira\Model\CreatedIssue;

class CreateIssueCommand
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var ModelFactory
     */
    protected $modelFactory;

    /**
     * @var array
     */
    protected $fields;

    public function __construct(ModelFactory $modelFactory, ClientInterface $client, array $fields)
    {
        $this->modelFactory = $modelFactory;
        $this->client = $client;
        $this->fields = $fields;
    }

    public function execute(): CreatedIssue
    {
        try {
            $response = $this->client->post(Endpoint::POST_ISSUE, [
                'fields' => $this->fields
            ]);

            $body = json_decode($response->getBody()->getContents(), true);

            return $this->modelFactory->create(CreatedIssue::class, $body);
        } catch (ClientException $exception) {
            throw new CommandException(sprintf('%s command failed. Cause: %s', get_class($this), $exception->getMessage()), 0, $exception);
        }
    }

    public static function createFields(string $projectId, string $issueTypeId, string $summary, array $otherFields = []): array
    {
        return array_merge_recursive($otherFields, [
            'summary' => $summary,
            'project' => [
                'id' => $projectId,
            ],
            'issuetype' => [
                'id' => $issueTypeId
            ]
        ]);
    }
}
